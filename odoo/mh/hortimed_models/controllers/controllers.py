# -*- coding: utf-8 -*-
# from odoo import http


# class HortimedModels(http.Controller):
#     @http.route('/hortimed_models/hortimed_models/', auth='public')
#     def index(self, **kw):
#         return "Hello, world"

#     @http.route('/hortimed_models/hortimed_models/objects/', auth='public')
#     def list(self, **kw):
#         return http.request.render('hortimed_models.listing', {
#             'root': '/hortimed_models/hortimed_models',
#             'objects': http.request.env['hortimed_models.hortimed_models'].search([]),
#         })

#     @http.route('/hortimed_models/hortimed_models/objects/<model("hortimed_models.hortimed_models"):obj>/', auth='public')
#     def object(self, obj, **kw):
#         return http.request.render('hortimed_models.object', {
#             'object': obj
#         })
