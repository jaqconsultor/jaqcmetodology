# -*- coding: utf-8 -*-

from odoo import models, fields, api

class hortimed_nursey_data(models.Model):
     _name = 'hortimed_nursey.data'
     _description = 'hortimed_nursey.data'

     name = fields.Char()
     description = fields.Text()

