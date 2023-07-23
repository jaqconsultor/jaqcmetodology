# -*- coding: utf-8 -*-

# from odoo import models, fields, api


# class ddr_ginecoreport(models.Model):
#     _name = 'ddr_ginecoreport.ddr_ginecoreport'
#     _description = 'ddr_ginecoreport.ddr_ginecoreport'

#     name = fields.Char()
#     value = fields.Integer()
#     value2 = fields.Float(compute="_value_pc", store=True)
#     description = fields.Text()
#
#     @api.depends('value')
#     def _value_pc(self):
#         for record in self:
#             record.value2 = float(record.value) / 100
