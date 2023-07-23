# -*- coding: utf-8 -*-

# from odoo import models, fields, api


# class ddr_odontoreport(models.Model):
#     _name = 'ddr_odontoreport.ddr_odontoreport'
#     _description = 'ddr_odontoreport.ddr_odontoreport'

#     name = fields.Char()
#     value = fields.Integer()
#     value2 = fields.Float(compute="_value_pc", store=True)
#     description = fields.Text()
#
#     @api.depends('value')
#     def _value_pc(self):
#         for record in self:
#             record.value2 = float(record.value) / 100
