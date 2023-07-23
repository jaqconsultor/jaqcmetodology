# -*- coding: utf-8 -*-

from odoo import models, fields, api

class hortimed_planification_task(models.Model):
     _name = 'hortimed_planification.task'
     _description = 'hortimed_planification.task'

     name = fields.Char()
     description = fields.Text()

