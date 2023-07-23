# -*- coding: utf-8 -*-

from odoo import models, fields, api

class hortimed_harvesting_close(models.Model):
     _name = 'hortimed_harvesting.close'
     _description = 'hortimed_harvesting.close'

     name = fields.Char()
     description = fields.Text()
