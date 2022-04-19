# -*- encoding: utf-8 -*-
"""
Copyright (c) 2019 - present AppSeed.us
"""
import json

from django import template
from django.contrib.auth.decorators import login_required
from django.http import HttpResponse
from django.template import loader
from django.shortcuts import render, redirect
from django.contrib.auth import authenticate, login, logout
from django.contrib.auth.models import User
from django.forms.utils import ErrorList
from django.http import HttpResponse
from .forms import LoginForm
from app.models import Sale, Stats,Users
from django.shortcuts import render,HttpResponseRedirect,redirect
from django.urls import reverse
from django.contrib.auth.forms import UserCreationForm, AuthenticationForm
from django.contrib import messages


# def login_view(request):
#     form = AuthenticationForm(request=request,data=request.POST)
#     msg = None
#     if request.method == "POST":
#         if form.is_valid():
#             username = form.cleaned_data.get("username")
#             password = form.cleaned_data.get("password")
#             user = authenticate(username=username, password=password)
#             if user is not None:
#                 login(request, user)
#                 return redirect("/")
#             else:
#                 msg = 'Invalid credentials'
#         else:
#             msg = 'Error validating the form'
#     return render(request, "accounts/login.html", {"form": form, "msg" : msg})
#
# # def login_view(request):
# #     msg = None
# #     if not request.user.is_authenticated:
# #         if request.method == "POST":
# #             fm = AuthenticationForm(request=request,data=request.POST)
# #             if fm.is_valid():
# #                 username = fm.cleaned_data['username']
# #                 password = fm.cleaned_data['password']
# #                 user = authenticate(username=username, password=password)
# #                 if user is not None:
# #                     login(request,user)
# #                     return HttpResponseRedirect(reverse('home'))
# #                 else:
# #                     msg = 'Invalid credentials'
# #         else:
# #             fm = AuthenticationForm()
# #         return render(request,'core/templates/accounts/login.html',{"form": fm, "msg" : msg})
# #     else:
# #         return HttpResponseRedirect('')
#
# def Logout(request):
#     logout(request)
#     return HttpResponseRedirect(reverse('login'))

def index(request):
    if request.user.is_authenticated:
        users = Users.objects.all().order_by('id')
        context = {'segment': 'index','users':users}
        html_template = loader.get_template('index.html')
        with open('sample_data/chart_morris.json', 'r') as f:
            context['chart_data'] = json.dumps(json.load(f))
        return HttpResponse(html_template.render(context, request))
    else:
        return HttpResponseRedirect(reverse('login'))


def charts_file(request):
    context = {'segment': 'charts_from_file'}
    html_template = loader.get_template('charts-from-file.html')
    with open('sample_data/chart_morris.json', 'r') as f:
        context['chart_data'] = json.dumps(json.load(f))
    return HttpResponse(html_template.render(context, request))    

def charts_input(request):
    context = {'segment': 'charts_from_input'}
    html_template = loader.get_template('charts-from-input.html')

    # -----------------------------------------------
    # Use data from STATS Table
    # -----------------------------------------------

    stats, labels = Stats.get_report()
    data = [
        {
            'y': year,
            'a': '{:.2f}'.format( stats[year].get('prod1_sales') ), 
            'b': '{:.2f}'.format( stats[year].get('prod2_sales') ), 
            'c': '{:.2f}'.format( stats[year].get('prod3_sales') )  
        } for year in stats
    ]

    context['chart_data'] = json.dumps({
        'element': 'morris-bar-chart',
        'data': data,
        'xkey': 'y',
        'barSizeRatio': 0.70,
        'barGap': 3,
        'resize': True,
        'responsive': True,
        'ykeys': ['a', 'b', 'c'],  # it can be custom
        'labels': labels,
        'barColors': ['0-#1de9b6-#1dc4e9', '0-#899FD4-#A389D4', '#04a9f5']  # it can be custom
    })

    return HttpResponse(html_template.render(context, request))

def charts_load(request):
    context = {'segment': 'charts_from_load'}
    html_template = loader.get_template('charts-from-load.html')

    # -----------------------------------------------
    # Extract data from Sale table 
    # -----------------------------------------------

    sales, labels = Sale.get_sales_report()
    data = [
        {
            'y': year,
            'a': '{:.2f}'.format(sales[year].get('A')),
            'b': '{:.2f}'.format(sales[year].get('B')),
            'c': '{:.2f}'.format(sales[year].get('C'))
        } for year in sales
    ]

    context['chart_data'] = json.dumps({
        'element': 'morris-bar-chart',
        'data': data,
        'xkey': 'y',
        'barSizeRatio': 0.70,
        'barGap': 3,
        'resize': True,
        'responsive': True,
        'ykeys': ['a', 'b', 'c'],  # it can be custom
        'labels': labels,
        'barColors': ['0-#1de9b6-#1dc4e9', '0-#899FD4-#A389D4', '#04a9f5']  # it can be custom
    })

    return HttpResponse(html_template.render(context, request))

def pages(request):
    context = {}
    # All resource paths end in .html.
    # Pick out the html file name from the url. And load that template.
    try:

        load_template = request.path.split('/')[-1]
        context['segment'] = load_template

        html_template = loader.get_template(load_template)
        return HttpResponse(html_template.render(context, request))

    except template.TemplateDoesNotExist:

        html_template = loader.get_template('page-404.html')
        return HttpResponse(html_template.render(context, request))

    except:

        html_template = loader.get_template('page-500.html')
        return HttpResponse(html_template.render(context, request))
