# -*- coding: utf-8 -*-

# from odoo import models, fields, api


# class ddr_medicalreport(models.Model):
#     _name = 'ddr_medicalreport.ddr_medicalreport'
#     _description = 'ddr_medicalreport.ddr_medicalreport'

#     name = fields.Char()
#     value = fields.Integer()
#     value2 = fields.Float(compute="_value_pc", store=True)
#     description = fields.Text()
#
#     @api.depends('value')
#     def _value_pc(self):
#         for record in self:
#             record.value2 = float(record.value) / 100
