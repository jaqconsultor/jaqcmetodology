# -*- coding: utf-8 -*-
# from odoo import http


# class DdrCitas(http.Controller):
#     @http.route('/ddr_citas/ddr_citas/', auth='public')
#     def index(self, **kw):
#         return "Hello, world"

#     @http.route('/ddr_citas/ddr_citas/objects/', auth='public')
#     def list(self, **kw):
#         return http.request.render('ddr_citas.listing', {
#             'root': '/ddr_citas/ddr_citas',
#             'objects': http.request.env['ddr_citas.ddr_citas'].search([]),
#         })

#     @http.route('/ddr_citas/ddr_citas/objects/<model("ddr_citas.ddr_citas"):obj>/', auth='public')
#     def object(self, obj, **kw):
#         return http.request.render('ddr_citas.object', {
#             'object': obj
#         })
