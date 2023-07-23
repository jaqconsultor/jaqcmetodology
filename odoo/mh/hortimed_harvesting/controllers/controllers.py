# -*- coding: utf-8 -*-
# from odoo import http


# class HortimedHarvesting(http.Controller):
#     @http.route('/hortimed_harvesting/hortimed_harvesting/', auth='public')
#     def index(self, **kw):
#         return "Hello, world"

#     @http.route('/hortimed_harvesting/hortimed_harvesting/objects/', auth='public')
#     def list(self, **kw):
#         return http.request.render('hortimed_harvesting.listing', {
#             'root': '/hortimed_harvesting/hortimed_harvesting',
#             'objects': http.request.env['hortimed_harvesting.hortimed_harvesting'].search([]),
#         })

#     @http.route('/hortimed_harvesting/hortimed_harvesting/objects/<model("hortimed_harvesting.hortimed_harvesting"):obj>/', auth='public')
#     def object(self, obj, **kw):
#         return http.request.render('hortimed_harvesting.object', {
#             'object': obj
#         })
