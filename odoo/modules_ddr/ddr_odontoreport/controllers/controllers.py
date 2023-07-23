# -*- coding: utf-8 -*-
# from odoo import http


# class DdrOdontoreport(http.Controller):
#     @http.route('/ddr_odontoreport/ddr_odontoreport/', auth='public')
#     def index(self, **kw):
#         return "Hello, world"

#     @http.route('/ddr_odontoreport/ddr_odontoreport/objects/', auth='public')
#     def list(self, **kw):
#         return http.request.render('ddr_odontoreport.listing', {
#             'root': '/ddr_odontoreport/ddr_odontoreport',
#             'objects': http.request.env['ddr_odontoreport.ddr_odontoreport'].search([]),
#         })

#     @http.route('/ddr_odontoreport/ddr_odontoreport/objects/<model("ddr_odontoreport.ddr_odontoreport"):obj>/', auth='public')
#     def object(self, obj, **kw):
#         return http.request.render('ddr_odontoreport.object', {
#             'object': obj
#         })
