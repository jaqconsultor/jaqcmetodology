# -*- coding: utf-8 -*-

from odoo import models, fields, api


class hortimed_checks_books(models.Model):
     _name = 'hortimed_checks.checks_books'
     _description = 'hortimed_checks.checks_books'

     name = fields.Char()
     description = fields.Text()

