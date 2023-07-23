# -*- coding: utf-8 -*-
# from odoo import http


# class DdrGinecoreport(http.Controller):
#     @http.route('/ddr_ginecoreport/ddr_ginecoreport/', auth='public')
#     def index(self, **kw):
#         return "Hello, world"

#     @http.route('/ddr_ginecoreport/ddr_ginecoreport/objects/', auth='public')
#     def list(self, **kw):
#         return http.request.render('ddr_ginecoreport.listing', {
#             'root': '/ddr_ginecoreport/ddr_ginecoreport',
#             'objects': http.request.env['ddr_ginecoreport.ddr_ginecoreport'].search([]),
#         })

#     @http.route('/ddr_ginecoreport/ddr_ginecoreport/objects/<model("ddr_ginecoreport.ddr_ginecoreport"):obj>/', auth='public')
#     def object(self, obj, **kw):
#         return http.request.render('ddr_ginecoreport.object', {
#             'object': obj
#         })
