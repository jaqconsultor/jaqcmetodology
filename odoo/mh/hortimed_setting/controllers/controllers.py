# -*- coding: utf-8 -*-
# from odoo import http


# class HortimedSetting(http.Controller):
#     @http.route('/hortimed_setting/hortimed_setting/', auth='public')
#     def index(self, **kw):
#         return "Hello, world"

#     @http.route('/hortimed_setting/hortimed_setting/objects/', auth='public')
#     def list(self, **kw):
#         return http.request.render('hortimed_setting.listing', {
#             'root': '/hortimed_setting/hortimed_setting',
#             'objects': http.request.env['hortimed_setting.hortimed_setting'].search([]),
#         })

#     @http.route('/hortimed_setting/hortimed_setting/objects/<model("hortimed_setting.hortimed_setting"):obj>/', auth='public')
#     def object(self, obj, **kw):
#         return http.request.render('hortimed_setting.object', {
#             'object': obj
#         })
