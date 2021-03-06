# Generated by Django 2.2.5 on 2020-06-30 14:42

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    dependencies = [
        ('BusBooking', '0008_addbusmodel'),
    ]

    operations = [
        migrations.CreateModel(
            name='Transactions',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('No_of_passengers', models.IntegerField()),
                ('Travel_date', models.DateField()),
                ('Bus_details', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='BusBooking.AddBusModel')),
            ],
        ),
        migrations.AddField(
            model_name='addusermodel',
            name='transaction',
            field=models.ForeignKey(blank=True, null=True, on_delete=django.db.models.deletion.CASCADE, to='BusBooking.Transactions'),
        ),
    ]
