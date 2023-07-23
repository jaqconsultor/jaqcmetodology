# -*- coding: utf-8 -*-

from odoo import models, fields, api

class hortimed_harvesting_open(models.Model):
     _name = 'hortimed_harvesting.open'
     _description = 'hortimed_harvesting.open'

     name = fields.Char()
     description = fields.Text()

