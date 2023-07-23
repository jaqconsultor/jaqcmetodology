# -*- coding: utf-8 -*-
# from odoo import http


# class HortimedChecks(http.Controller):
#     @http.route('/hortimed_checks/hortimed_checks/', auth='public')
#     def index(self, **kw):
#         return "Hello, world"

#     @http.route('/hortimed_checks/hortimed_checks/objects/', auth='public')
#     def list(self, **kw):
#         return http.request.render('hortimed_checks.listing', {
#             'root': '/hortimed_checks/hortimed_checks',
#             'objects': http.request.env['hortimed_checks.hortimed_checks'].search([]),
#         })

#     @http.route('/hortimed_checks/hortimed_checks/objects/<model("hortimed_checks.hortimed_checks"):obj>/', auth='public')
#     def object(self, obj, **kw):
#         return http.request.render('hortimed_checks.object', {
#             'object': obj
#         })
