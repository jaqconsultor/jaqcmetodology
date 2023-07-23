# -*- coding: utf-8 -*-
# from odoo import http


# class DdrPacientes(http.Controller):
#     @http.route('/ddr_pacientes/ddr_pacientes/', auth='public')
#     def index(self, **kw):
#         return "Hello, world"

#     @http.route('/ddr_pacientes/ddr_pacientes/objects/', auth='public')
#     def list(self, **kw):
#         return http.request.render('ddr_pacientes.listing', {
#             'root': '/ddr_pacientes/ddr_pacientes',
#             'objects': http.request.env['ddr_pacientes.ddr_pacientes'].search([]),
#         })

#     @http.route('/ddr_pacientes/ddr_pacientes/objects/<model("ddr_pacientes.ddr_pacientes"):obj>/', auth='public')
#     def object(self, obj, **kw):
#         return http.request.render('ddr_pacientes.object', {
#             'object': obj
#         })
