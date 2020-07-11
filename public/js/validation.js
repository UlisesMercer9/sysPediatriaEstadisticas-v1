$(document).ready(function(){

$('#AmindCreateForm').bootstrapValidator({
   framework: 'bootstrap',
   icon: {
      valid: 'glyphicon glyphicon-ok',
      invalid: 'glyphicon glyphicon-remove',
      validating: 'glyphicon glyphicon-refresh'
   },
   live: 'enabled',
        fields: {

           name: {

               validators: {
                   notEmpty: {
                       message: 'El nombre es requerido'
                   },
                   regexp: {
                        regexp: /^[a-zA-Z\s-zñáéíóúü]+$/,
                        message: 'No se aceptan digitos en este campo'
                    }
               }
           },

           email: {
               row: '.col-lg-6',
               validators: {
                   notEmpty: {
                       message: 'El email es requerido'
                   },
                   emailAddress: {
                       message: 'La direccion de email no es valida'
                   }
               }
           },

           password: {
               row: '.col-lg-6',
               validators: {
                   notEmpty: {
                       message: 'La contraseña es requerida'
                   },
                   stringLength: {
                        min: 6,
                        max: 30,
                        message: 'La contraseña debe de tener mas de 6 caracteres'
                  },
                  different: {
                       field: 'name',
                       message: 'La contraseña no puede ser misma que el nombre'
                   }
               }
           },

           nul: {
             row: '.col-lg-6',
               validators: {
                   notEmpty: {
                       message: 'La contraseña es requerida'
                   },
                   stringLength: {
                        min: 6,
                        max: 30,
                        message: 'La contraseña debe de tener mas de 6 caracteres'
                  },
                  identical: {
                       field: 'password',
                       message: 'Las contraseñas deben ser iguales'
                   }
               }
           }
       }
    });

    $('#AdminUpdateForm').bootstrapValidator({
       framework: 'bootstrap',
       icon: {
          valid: 'glyphicon glyphicon-ok',
          invalid: 'glyphicon glyphicon-remove',
          validating: 'glyphicon glyphicon-refresh'
       },
       live: 'enabled',
            fields: {
               name: {
                   row: '.col-xs-4',
                   validators: {
                       notEmpty: {
                           message: 'El nombre es requerido'
                       },
                       regexp: {
                            regexp: /^[a-zA-Z\s-zñáéíóúü]+$/,
                            message: 'No se aceptan digitos en este campo'
                        }
                   }
               },

               email: {
                   validators: {
                       notEmpty: {
                           message: 'El email es requerido'
                       },
                       emailAddress: {
                           message: 'La direccion de email no es valida'
                       }
                   }
               },

               password: {
                   validators: {
                       stringLength: {
                            min: 6,
                            max: 30,
                            message: 'La contraseña debe de tener mas de 6 caracteres'
                      },
                      different: {
                           field: 'name',
                           message: 'La contraseña no puede ser misma que el nombre'
                       }
                   }
               },

               nul: {
                   validators: {
                       stringLength: {
                            min: 6,
                            max: 30,
                            message: 'La contraseña debe de tener mas de 6 caracteres'
                      },
                      identical: {
                           field: 'password',
                           message: 'Las contraseñas deben ser iguales'
                       }
                   }
               }
           }
        });

        $('#EspeCreateForm').bootstrapValidator({
           framework: 'bootstrap',
           icon: {
              valid: 'glyphicon glyphicon-ok',
              invalid: 'glyphicon glyphicon-remove',
              validating: 'glyphicon glyphicon-refresh'
           },
           live: 'enabled',
                fields: {
                   nombre: {
                       row: '.col-xs-4',
                       validators: {
                           notEmpty: {
                               message: 'El nombre es requerido'
                           },
                           regexp: {
                                regexp: /^[a-zA-Z\s-zñáéíóúü]+$/,
                                message: 'No se aceptan digitos en este campo'
                            }
                       }
                   },

                   apellidos: {
                       row: '.col-xs-4',
                       validators: {
                           notEmpty: {
                               message: 'El apellido es requerido'
                           },
                           regexp: {
                                regexp: /^[a-zA-Z\s-zñáéíóúü]+$/,
                                message: 'No se aceptan digitos en este campo'
                            }
                       }
                   },

                   cedula: {
                       row: '.col-xs-4',
                       validators: {
                           notEmpty: {
                               message: 'La cedula profesional es requerida'
                           },
                           numeric: {
                           message: 'no se aceptan caracteres numericos en este campo'
                           }
                         }
                   },

                   email: {
                       validators: {
                           notEmpty: {
                               message: 'El email es requerido'
                           },
                           emailAddress: {
                               message: 'La direccion de email no es valida'
                           }
                       }
                   },

                   password: {
                       validators: {
                           notEmpty: {
                               message: 'La contraseña es requerida'
                           },
                           stringLength: {
                                min: 6,
                                max: 30,
                                message: 'La contraseña debe de tener mas de 6 caracteres'
                          },
                          different: {
                               field: 'name',
                               message: 'La contraseña no puede ser misma que el nombre'
                           }
                       }
                   },

                   nul: {
                       validators: {
                           notEmpty: {
                               message: 'La contraseña es requerida'
                           },
                           stringLength: {
                                min: 6,
                                max: 30,
                                message: 'La contraseña debe de tener mas de 6 caracteres'
                          },
                          identical: {
                               field: 'password',
                               message: 'Las contraseñas deben ser iguales'
                           }
                       }
                   },

                   especialidad: {
                       validators: {
                           notEmpty: {
                               message: 'La especialidad del especialista es requerida'
                           },
                           regexp: {
                                regexp: /^[a-zA-Z\s-zñáéíóúü]+$/,
                                message: 'No se aceptan digitos en este campo'
                            }
                       }
                   },

                   organizacion: {
                       validators: {
                           notEmpty: {
                               message: 'La organizacion perteneciente del especialista es requerida'
                           }
                       }
                   },

                   estado: {
                       validators: {
                           notEmpty: {
                               message: 'seleccione una opcion'
                           }
                       }
                   },

                   ciudad: {
                       validators: {
                           notEmpty: {
                               message: 'seleccione una opcion'
                           }
                       }
                   },

                   localidad: {
                       validators: {
                           notEmpty: {
                               message: 'La localidad es requerida'
                           }
                       }
                   },

                   postal: {
                       validators: {
                           notEmpty: {
                               message: 'La localidad es requerida'
                           }
                       }
                   }
               }
            });

            $('#EspeUpdateForm').bootstrapValidator({
               framework: 'bootstrap',
               icon: {
                  valid: 'glyphicon glyphicon-ok',
                  invalid: 'glyphicon glyphicon-remove',
                  validating: 'glyphicon glyphicon-refresh'
               },
               live: 'enabled',
                    fields: {
                       nombre: {
                           row: '.col-xs-4',
                           validators: {
                               notEmpty: {
                                   message: 'El nombre es requerido'
                               },
                               regexp: {
                                    regexp: /^[a-zA-Z\s-zñáéíóúü]+$/,
                                    message: 'No se aceptan digitos en este campo'
                                }
                           }
                       },

                       apellidos: {
                           row: '.col-xs-4',
                           validators: {
                               notEmpty: {
                                   message: 'El apellido es requerido'
                               },
                               regexp: {
                                    regexp: /^[a-zA-Z\s-zñáéíóúü]+$/,
                                    message: 'No se aceptan digitos en este campo'
                                }
                           }
                       },

                       cedula: {
                           row: '.col-xs-4',
                           validators: {
                               notEmpty: {
                                   message: 'La cedula profesional es requerida'
                               },
                               numeric: {
                               message: 'no se aceptan caracteres numericos en este campo'
                               }
                             }
                       },

                       email: {
                           validators: {
                               notEmpty: {
                                   message: 'El email es requerido'
                               },
                               emailAddress: {
                                   message: 'La direccion de email no es valida'
                               }
                           }
                       },

                       password: {
                           validators: {
                               stringLength: {
                                    min: 6,
                                    max: 30,
                                    message: 'La contraseña debe de tener mas de 6 caracteres'
                              },
                              different: {
                                   field: 'name',
                                   message: 'La contraseña no puede ser misma que el nombre'
                               }
                           }
                       },

                       nul: {
                           validators: {
                               stringLength: {
                                    min: 6,
                                    max: 30,
                                    message: 'La contraseña debe de tener mas de 6 caracteres'
                              },
                              identical: {
                                   field: 'password',
                                   message: 'Las contraseñas deben ser iguales'
                               }
                           }
                       },

                       especialidad: {
                           validators: {
                               notEmpty: {
                                   message: 'La especialidad del especialista es requerida'
                               },
                               regexp: {
                                    regexp: /^[a-zA-Z\s-zñáéíóúü]+$/,
                                    message: 'No se aceptan digitos en este campo'
                                }
                           }
                       },

                       organizacion: {
                           validators: {
                               notEmpty: {
                                   message: 'La organizacion perteneciente del especialista es requerida'
                               }
                           }
                       },

                       estado: {
                           validators: {
                               notEmpty: {
                                   message: 'seleccione una opcion'
                               }
                           }
                       },

                       ciudad: {
                           validators: {
                               notEmpty: {
                                   message: 'seleccione una opcion'
                               }
                           }
                       },

                       localidad: {
                           validators: {
                               notEmpty: {
                                   message: 'La localidad es requerida'
                               }
                           }
                       },

                       postal: {
                           validators: {
                               notEmpty: {
                                   message: 'La localidad es requerida'
                               },
                               numeric: {
                               message: 'no se aceptan caracteres numericos en este campo'
                               }
                           }
                       }
                   }
                });

                $('#infanteCreateForm').bootstrapValidator({
                   framework: 'bootstrap',
                   icon: {
                      valid: 'glyphicon glyphicon-ok',
                      invalid: 'glyphicon glyphicon-remove',
                      validating: 'glyphicon glyphicon-refresh'
                   },
                   live: 'enabled',
                        fields: {
                           nombre: {
                               row: '.col-xs-4',
                               validators: {
                                   notEmpty: {
                                       message: 'El nombre es requerido'
                                   },
                                   regexp: {
                                        regexp: /^[a-zA-Z\s-zñáéíóúü]+$/,
                                        message: 'No se aceptan digitos en este campo'
                                    }
                               }
                           },

                           apellido: {
                               row: '.col-xs-4',
                               validators: {
                                   notEmpty: {
                                       message: 'El apellido es requerido'
                                   },
                                   regexp: {
                                        regexp: /^[a-zA-Z\s-zñáéíóúü]+$/,
                                        message: 'No se aceptan digitos en este campo'
                                    }
                               }
                           },

                           edad: {
                               row: '.col-xs-4',
                               validators: {
                                   notEmpty: {
                                       message: 'La cedula profesional es requerida'
                                   },
                                   numeric: {
                                   message: 'no se aceptan caracteres numericos en este campo'
                                   }
                                 }
                           },

                           sexo: {
                               validators: {
                                   notEmpty: {
                                       message: 'Seleccione una opcion'
                                   }
                               }
                           },

                           estado: {
                               validators: {
                                   notEmpty: {
                                       message: 'seleccione una opcion'
                                   }
                               }
                           },

                           ciudad: {
                               validators: {
                                   notEmpty: {
                                       message: 'seleccione una opcion'
                                   }
                               }
                           },

                           localidad: {
                               validators: {
                                   notEmpty: {
                                       message: 'La localidad es requerida'
                                   }
                               }
                           },

                           postal: {
                               validators: {
                                   notEmpty: {
                                       message: 'La localidad es requerida'
                                   },
                                   numeric: {
                                   message: 'no se aceptan caracteres numericos en este campo'
                                   }
                               }
                           }
                       }
                    });

                    $('#infanteUpdateForm').bootstrapValidator({
                       framework: 'bootstrap',
                       icon: {
                          valid: 'glyphicon glyphicon-ok',
                          invalid: 'glyphicon glyphicon-remove',
                          validating: 'glyphicon glyphicon-refresh'
                       },
                       live: 'enabled',
                            fields: {
                               edad: {
                                   row: '.col-xs-4',
                                   validators: {
                                       notEmpty: {
                                           message: 'La cedula profesional es requerida'
                                       },
                                       numeric: {
                                       message: 'no se aceptan caracteres numericos en este campo'
                                       }
                                     }
                               },

                               estado: {
                                   validators: {
                                       notEmpty: {
                                           message: 'seleccione una opcion'
                                       }
                                   }
                               },

                               ciudad: {
                                   validators: {
                                       notEmpty: {
                                           message: 'seleccione una opcion'
                                       }
                                   }
                               },

                               localidad: {
                                   validators: {
                                       notEmpty: {
                                           message: 'La localidad es requerida'
                                       }
                                   }
                               },

                               postal: {
                                   validators: {
                                       notEmpty: {
                                           message: 'La localidad es requerida'
                                       },
                                       numeric: {
                                       message: 'no se aceptan caracteres numericos en este campo'
                                       }
                                   }
                               }
                           }
                        });

                        $('#tutorCreateForm').bootstrapValidator({
                           framework: 'bootstrap',
                           icon: {
                              valid: 'glyphicon glyphicon-ok',
                              invalid: 'glyphicon glyphicon-remove',
                              validating: 'glyphicon glyphicon-refresh'
                           },
                           live: 'enabled',
                                fields: {
                                   nombre: {
                                       row: '.col-xs-4',
                                       validators: {
                                           notEmpty: {
                                               message: 'El nombre es requerido'
                                           },
                                           regexp: {
                                                regexp: /^[a-zA-Z\s-zñáéíóúü]+$/,
                                                message: 'No se aceptan digitos en este campo'
                                            }
                                       }
                                   },

                                   apellido: {
                                       row: '.col-xs-4',
                                       validators: {
                                           notEmpty: {
                                               message: 'El apellido es requerido'
                                           },
                                           regexp: {
                                                regexp: /^[a-zA-Z\s-zñáéíóúü]+$/,
                                                message: 'No se aceptan digitos en este campo'
                                            }
                                       }
                                   },

                                   id_infante: {
                                       row: '.col-xs-4',
                                       validators: {
                                           notEmpty: {
                                               message: 'Seleccione una opcion'
                                           }
                                         }
                                   },

                                   email: {
                                       validators: {
                                           notEmpty: {
                                               message: 'El email es requerido'
                                           },
                                           emailAddress: {
                                               message: 'La direccion de email no es valida'
                                           }
                                       }
                                   },

                                   password: {
                                       validators: {
                                           notEmpty: {
                                               message: 'La contraseña es requerida'
                                           },
                                           stringLength: {
                                                min: 6,
                                                max: 30,
                                                message: 'La contraseña debe de tener mas de 6 caracteres'
                                          },
                                          different: {
                                               field: 'name',
                                               message: 'La contraseña no puede ser misma que el nombre'
                                           }
                                       }
                                   },

                                   nul: {
                                       validators: {
                                           notEmpty: {
                                               message: 'La contraseña es requerida'
                                           },
                                           stringLength: {
                                                min: 6,
                                                max: 30,
                                                message: 'La contraseña debe de tener mas de 6 caracteres'
                                          },
                                          identical: {
                                               field: 'password',
                                               message: 'Las contraseñas deben ser iguales'
                                           }
                                       }
                                   },

                                   especialidad: {
                                       validators: {
                                           notEmpty: {
                                               message: 'La especialidad del especialista es requerida'
                                           },
                                           regexp: {
                                                regexp: /^[a-zA-Z\s-zñáéíóúü]+$/,
                                                message: 'No se aceptan digitos en este campo'
                                            }
                                       }
                                   },

                                   telefono: {
                                       validators: {
                                           notEmpty: {
                                               message: 'el telefono es requerida'
                                           },
                                           numeric: {
                                           message: 'no se aceptan caracteres numericos en este campo'
                                           }
                                       }
                                   },

                                   estado: {
                                       validators: {
                                           notEmpty: {
                                               message: 'seleccione una opcion'
                                           }
                                       }
                                   },


                                   ciudad: {
                                       validators: {
                                           notEmpty: {
                                               message: 'seleccione una opcion'
                                           }
                                       }
                                   },

                                   localidad: {
                                       validators: {
                                           notEmpty: {
                                               message: 'La localidad es requerida'
                                           }
                                       }
                                   },

                                   postal: {
                                       validators: {
                                           notEmpty: {
                                               message: 'La localidad es requerida'
                                           },
                                           numeric: {
                                           message: 'no se aceptan caracteres numericos en este campo'
                                           }
                                       }
                                   }
                               }
                            });
});
