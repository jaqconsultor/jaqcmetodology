# -*- coding: utf-8 -*-
# from odoo import http


# class HortimedLogEvents(http.Controller):
#     @http.route('/hortimed_log_events/hortimed_log_events/', auth='public')
#     def index(self, **kw):
#         return "Hello, world"

#     @http.route('/hortimed_log_events/hortimed_log_events/objects/', auth='public')
#     def list(self, **kw):
#         return http.request.render('hortimed_log_events.listing', {
#             'root': '/hortimed_log_events/hortimed_log_events',
#             'objects': http.request.env['hortimed_log_events.hortimed_log_events'].search([]),
#         })

#     @http.route('/hortimed_log_events/hortimed_log_events/objects/<model("hortimed_log_events.hortimed_log_events"):obj>/', auth='public')
#     def object(self, obj, **kw):
#         return http.request.render('hortimed_log_events.object', {
#             'object': obj
#         })
