# -*- coding: utf-8 -*-
# from odoo import http


# class DdrPediareport(http.Controller):
#     @http.route('/ddr_pediareport/ddr_pediareport/', auth='public')
#     def index(self, **kw):
#         return "Hello, world"

#     @http.route('/ddr_pediareport/ddr_pediareport/objects/', auth='public')
#     def list(self, **kw):
#         return http.request.render('ddr_pediareport.listing', {
#             'root': '/ddr_pediareport/ddr_pediareport',
#             'objects': http.request.env['ddr_pediareport.ddr_pediareport'].search([]),
#         })

#     @http.route('/ddr_pediareport/ddr_pediareport/objects/<model("ddr_pediareport.ddr_pediareport"):obj>/', auth='public')
#     def object(self, obj, **kw):
#         return http.request.render('ddr_pediareport.object', {
#             'object': obj
#         })
