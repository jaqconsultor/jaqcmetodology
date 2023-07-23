# -*- coding: utf-8 -*-

from odoo import models, fields, api



class hortimed_lots(models.Model):
     _name = 'hortimed_lots.lots'
     _description = 'hortimed_lots.lots'

     name = fields.Char()
     description = fields.Text()

