pragma  solidity 0.4.25;

/**
@title Clevera
@notice Contrato Inteligente para investimento em start ups
@author HaCKING tunes
*/
contract Clevera {

    struct Contracto {
        uint id;
        address statup;
        address acelaradora;
        uint invest;
        uint quotas;
        string payment_maturity;
        string buy_maturity;
        string public_deadline;
    }

    
    Contracto[] contractos;
    
    
    function incluiContrato(uint id, address statup, address acelaradora, uint invest, uint quotas, string payment_maturity, string buy_maturity, string public_deadline) {
        Contracto memory novoContrato = Contracto(id, statup, acelaradora, invest, quotas, payment_maturity, buy_maturity, public_deadline);
        contractos.push(novoContrato);
    }
    
    function pesquisarContrato(uint id) public view returns (uint, address, address, uint, uint, string, string, string)  {
        Contracto memory contractoTemporario = contractos[id];
        return (id, contractoTemporario.statup, contractoTemporario.acelaradora, contractoTemporario.invest, contractoTemporario.quotas, contractoTemporario.payment_maturity, contractoTemporario.buy_maturity, contractoTemporario.public_deadline);
    }
    
}