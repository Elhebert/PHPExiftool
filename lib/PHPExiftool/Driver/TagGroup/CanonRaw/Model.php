<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Model extends AbstractTagGroup
{

  protected string $id = 'CanonRaw:Model';

  protected string $name = 'Model';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Camera Model Name',
    'fr' => 'Modèle d\'appareil photo',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonRaw::MakeModel
       * line : 80017
       * type : string
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonRaw::MakeModel.CanonRaw:Model',
      'desc' => [
        'en' => 'Camera Model Name',
        'fr' => 'Modèle d\'appareil photo',
      ],
    ],
  ];

}
