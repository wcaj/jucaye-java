package com.jucaye.jucaye.controlles;

import com.jucaye.jucaye.models.Usuario;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;
import com.jucaye.jucaye.dao.UsuarioDao;


@RestController
public class AuthController {

    @Autowired
    private UsuarioDao usuarioDao;


    @RequestMapping(value = "login", method = RequestMethod.POST)
    public String login(@RequestBody Usuario usuario){
        if (usuarioDao.verificarCredenciales(usuario)){
            return "ok";
        }
        return "fail";
    }
}
