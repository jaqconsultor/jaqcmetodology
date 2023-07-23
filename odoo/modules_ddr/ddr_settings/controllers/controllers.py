# -*- coding: utf-8 -*-
# from odoo import http


# class DdrSettings(http.Controller):
#     @http.route('/ddr_settings/ddr_settings/', auth='public')
#     def index(self, **kw):
#         return "Hello, world"

#     @http.route('/ddr_settings/ddr_settings/objects/', auth='public')
#     def list(self, **kw):
#         return http.request.render('ddr_settings.listing', {
#             'root': '/ddr_settings/ddr_settings',
#             'objects': http.request.env['ddr_settings.ddr_settings'].search([]),
#         })

#     @http.route('/ddr_settings/ddr_settings/objects/<model("ddr_settings.ddr_settings"):obj>/', auth='public')
#     def object(self, obj, **kw):
#         return http.request.render('ddr_settings.object', {
#             'object': obj
#         })
