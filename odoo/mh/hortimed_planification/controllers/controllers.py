# -*- coding: utf-8 -*-
# from odoo import http


# class HortimedPlanification(http.Controller):
#     @http.route('/hortimed_planification/hortimed_planification/', auth='public')
#     def index(self, **kw):
#         return "Hello, world"

#     @http.route('/hortimed_planification/hortimed_planification/objects/', auth='public')
#     def list(self, **kw):
#         return http.request.render('hortimed_planification.listing', {
#             'root': '/hortimed_planification/hortimed_planification',
#             'objects': http.request.env['hortimed_planification.hortimed_planification'].search([]),
#         })

#     @http.route('/hortimed_planification/hortimed_planification/objects/<model("hortimed_planification.hortimed_planification"):obj>/', auth='public')
#     def object(self, obj, **kw):
#         return http.request.render('hortimed_planification.object', {
#             'object': obj
#         })
