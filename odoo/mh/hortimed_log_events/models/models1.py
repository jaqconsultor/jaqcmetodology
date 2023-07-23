# -*- coding: utf-8 -*-

from odoo import models, fields, api

class hortimed_log_events_error(models.Model):
     _name = 'hortimed_log_events.error'
     _description = 'hortimed_log_events.error'

     name = fields.Char()
     description = fields.Text()

