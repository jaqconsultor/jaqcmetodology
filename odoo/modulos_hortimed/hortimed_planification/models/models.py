# -*- coding: utf-8 -*-

from odoo import models, fields, api


class hortimed_planification_plan(models.Model):
     _name = 'hortimed_planification.plan'
     _description = 'hortimed_planification.plan'

     name = fields.Char()
     description = fields.Text()

