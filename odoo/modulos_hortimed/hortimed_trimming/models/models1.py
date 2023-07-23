# -*- coding: utf-8 -*-

from odoo import models, fields, api

class hortimed_trimming_b(models.Model):
     _name = 'hortimed_trimming.b'
     _description = 'hortimed_trimming.b'

     name = fields.Char()
     description = fields.Text()

