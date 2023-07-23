# -*- coding: utf-8 -*-
# from odoo import http


# class DdrMedicalreport(http.Controller):
#     @http.route('/ddr_medicalreport/ddr_medicalreport/', auth='public')
#     def index(self, **kw):
#         return "Hello, world"

#     @http.route('/ddr_medicalreport/ddr_medicalreport/objects/', auth='public')
#     def list(self, **kw):
#         return http.request.render('ddr_medicalreport.listing', {
#             'root': '/ddr_medicalreport/ddr_medicalreport',
#             'objects': http.request.env['ddr_medicalreport.ddr_medicalreport'].search([]),
#         })

#     @http.route('/ddr_medicalreport/ddr_medicalreport/objects/<model("ddr_medicalreport.ddr_medicalreport"):obj>/', auth='public')
#     def object(self, obj, **kw):
#         return http.request.render('ddr_medicalreport.object', {
#             'object': obj
#         })
