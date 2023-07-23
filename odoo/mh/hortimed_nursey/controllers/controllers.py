# -*- coding: utf-8 -*-
# from odoo import http


# class HortimedNursey(http.Controller):
#     @http.route('/hortimed_nursey/hortimed_nursey/', auth='public')
#     def index(self, **kw):
#         return "Hello, world"

#     @http.route('/hortimed_nursey/hortimed_nursey/objects/', auth='public')
#     def list(self, **kw):
#         return http.request.render('hortimed_nursey.listing', {
#             'root': '/hortimed_nursey/hortimed_nursey',
#             'objects': http.request.env['hortimed_nursey.hortimed_nursey'].search([]),
#         })

#     @http.route('/hortimed_nursey/hortimed_nursey/objects/<model("hortimed_nursey.hortimed_nursey"):obj>/', auth='public')
#     def object(self, obj, **kw):
#         return http.request.render('hortimed_nursey.object', {
#             'object': obj
#         })
