# -*- coding: utf-8 -*-
# from odoo import http


# class HortimedTrimming(http.Controller):
#     @http.route('/hortimed_trimming/hortimed_trimming/', auth='public')
#     def index(self, **kw):
#         return "Hello, world"

#     @http.route('/hortimed_trimming/hortimed_trimming/objects/', auth='public')
#     def list(self, **kw):
#         return http.request.render('hortimed_trimming.listing', {
#             'root': '/hortimed_trimming/hortimed_trimming',
#             'objects': http.request.env['hortimed_trimming.hortimed_trimming'].search([]),
#         })

#     @http.route('/hortimed_trimming/hortimed_trimming/objects/<model("hortimed_trimming.hortimed_trimming"):obj>/', auth='public')
#     def object(self, obj, **kw):
#         return http.request.render('hortimed_trimming.object', {
#             'object': obj
#         })
