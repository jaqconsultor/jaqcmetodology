# -*- coding: utf-8 -*-

from odoo import models, fields, api

class hortimed_setting_week_control(models.Model):
     _name = 'hortimed_setting.week_control'
     _description = 'hortimed_setting.week_control'

     name = fields.Char()
     description = fields.Text()

class hortimed_setting_places(models.Model):
     _name = 'hortimed_setting.places'
     _description = 'hortimed_setting.places'

     name = fields.Char()
     description = fields.Text()

class hortimed_setting_strain_name(models.Model):
     _name = 'hortimed_setting.strain_name'
     _description = 'hortimed_setting.strain_name'

     name = fields.Char()
     description = fields.Text()

class hortimed_setting_provider(models.Model):
     _name = 'hortimed_setting.provider'
     _description = 'hortimed_setting.provider'

     name = fields.Char()
     description = fields.Text()




