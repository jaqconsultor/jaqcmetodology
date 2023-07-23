# -*- coding: utf-8 -*-

# from odoo import models, fields, api


# class ddr_pacientes(models.Model):
#     _name = 'ddr_pacientes.ddr_pacientes'
#     _description = 'ddr_pacientes.ddr_pacientes'

#     name = fields.Char()
#     value = fields.Integer()
#     value2 = fields.Float(compute="_value_pc", store=True)
#     description = fields.Text()
#
#     @api.depends('value')
#     def _value_pc(self):
#         for record in self:
#             record.value2 = float(record.value) / 100
