# -*- coding: utf-8 -*-
# from odoo import http


# class HortimedLots(http.Controller):
#     @http.route('/hortimed_lots/hortimed_lots/', auth='public')
#     def index(self, **kw):
#         return "Hello, world"

#     @http.route('/hortimed_lots/hortimed_lots/objects/', auth='public')
#     def list(self, **kw):
#         return http.request.render('hortimed_lots.listing', {
#             'root': '/hortimed_lots/hortimed_lots',
#             'objects': http.request.env['hortimed_lots.hortimed_lots'].search([]),
#         })

#     @http.route('/hortimed_lots/hortimed_lots/objects/<model("hortimed_lots.hortimed_lots"):obj>/', auth='public')
#     def object(self, obj, **kw):
#         return http.request.render('hortimed_lots.object', {
#             'object': obj
#         })
