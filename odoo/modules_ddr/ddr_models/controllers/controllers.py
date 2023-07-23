# -*- coding: utf-8 -*-
# from odoo import http


# class DdrModels(http.Controller):
#     @http.route('/ddr_models/ddr_models/', auth='public')
#     def index(self, **kw):
#         return "Hello, world"

#     @http.route('/ddr_models/ddr_models/objects/', auth='public')
#     def list(self, **kw):
#         return http.request.render('ddr_models.listing', {
#             'root': '/ddr_models/ddr_models',
#             'objects': http.request.env['ddr_models.ddr_models'].search([]),
#         })

#     @http.route('/ddr_models/ddr_models/objects/<model("ddr_models.ddr_models"):obj>/', auth='public')
#     def object(self, obj, **kw):
#         return http.request.render('ddr_models.object', {
#             'object': obj
#         })
