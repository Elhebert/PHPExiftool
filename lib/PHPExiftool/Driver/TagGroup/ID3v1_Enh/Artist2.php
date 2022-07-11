<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ID3v1_Enh;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Artist2 extends AbstractTagGroup
{

  protected string $id = 'ID3v1_Enh:Artist2';

  protected string $name = 'Artist2';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Artist 2',
  ];

  protected int $count = 60;

  protected array $tags = [
    0 => [
      /**
       * table_name : ID3::v1_Enh
       * line : 148314
       * type : string
       * writable : false
       * count : 60
       * flags : 
       */
      'id' => 'ID3::v1_Enh.ID3v1_Enh:Artist2',
      'desc' => [
        'en' => 'Artist 2',
      ],
    ],
  ];

}
