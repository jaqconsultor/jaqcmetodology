# -*- coding: utf-8 -*-

from odoo import models, fields, api

class hortimed_checks(models.Model):
     _name = 'hortimed_checks.checks'
     _description = 'hortimed_checks.checks'

     name = fields.Char()
     description = fields.Text()
