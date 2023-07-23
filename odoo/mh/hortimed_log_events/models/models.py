# -*- coding: utf-8 -*-

from odoo import models, fields, api



class hortimed_log_events_audit(models.Model):
     _name = 'hortimed_log_events.audit'
     _description = 'hortimed_log_events.audit'

     name = fields.Char()
     description = fields.Text()

