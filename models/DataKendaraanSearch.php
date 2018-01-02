<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DataKendaraan;

/**
 * DataKendaraanSearch represents the model behind the search form about `app\models\DataKendaraan`.
 */
class DataKendaraanSearch extends DataKendaraan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nup', 'isi_silinder', 'nilai_perolehan', 'nilai_buku'], 'integer'],
            [['kd_barang', 'uraian', 'merk', 'tipe', 'thn_rakitan', 'no_mesin', 'no_rangka', 'no_bpkb', 'no_polisi', 'thn_perolehan', 'kondisi_barang', 'lokasi'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = DataKendaraan::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'nup' => $this->nup,
            'thn_rakitan' => $this->thn_rakitan,
            'isi_silinder' => $this->isi_silinder,
            'thn_perolehan' => $this->thn_perolehan,
            'nilai_perolehan' => $this->nilai_perolehan,
            'nilai_buku' => $this->nilai_buku,
        ]);

        $query->andFilterWhere(['like', 'kd_barang', $this->kd_barang])
            ->andFilterWhere(['like', 'uraian', $this->uraian])
            ->andFilterWhere(['like', 'merk', $this->merk])
            ->andFilterWhere(['like', 'tipe', $this->tipe])
            ->andFilterWhere(['like', 'no_mesin', $this->no_mesin])
            ->andFilterWhere(['like', 'no_rangka', $this->no_rangka])
            ->andFilterWhere(['like', 'no_bpkb', $this->no_bpkb])
            ->andFilterWhere(['like', 'no_polisi', $this->no_polisi])
            ->andFilterWhere(['like', 'kondisi_barang', $this->kondisi_barang])
            ->andFilterWhere(['like', 'lokasi', $this->lokasi]);

        return $dataProvider;
    }
}
