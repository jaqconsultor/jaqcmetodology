# -*- coding: utf-8 -*-
# from odoo import http


# class DdrNefrologia(http.Controller):
#     @http.route('/ddr_nefrologia/ddr_nefrologia/', auth='public')
#     def index(self, **kw):
#         return "Hello, world"

#     @http.route('/ddr_nefrologia/ddr_nefrologia/objects/', auth='public')
#     def list(self, **kw):
#         return http.request.render('ddr_nefrologia.listing', {
#             'root': '/ddr_nefrologia/ddr_nefrologia',
#             'objects': http.request.env['ddr_nefrologia.ddr_nefrologia'].search([]),
#         })

#     @http.route('/ddr_nefrologia/ddr_nefrologia/objects/<model("ddr_nefrologia.ddr_nefrologia"):obj>/', auth='public')
#     def object(self, obj, **kw):
#         return http.request.render('ddr_nefrologia.object', {
#             'object': obj
#         })
