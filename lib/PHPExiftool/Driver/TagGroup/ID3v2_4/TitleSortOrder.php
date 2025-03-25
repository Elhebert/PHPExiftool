<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ID3v2_4;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TitleSortOrder extends AbstractTagGroup
{

  protected string $id = 'ID3v2_4:TitleSortOrder';

  protected string $name = 'TitleSortOrder';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : ID3::v2_4
       * line : 149607
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ID3::v2_4.ID3v2_4:TitleSortOrder',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : ID3::v2_4
       * line : 149687
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ID3::v2_4.ID3v2_4:TitleSortOrder',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
