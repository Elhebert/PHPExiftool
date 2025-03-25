<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ICC_header;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ProfileCMMType extends AbstractTagGroup
{

  protected string $id = 'ICC-header:ProfileCMMType';

  protected string $name = 'ProfileCMMType';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : ICC_Profile::Header
       * line : 143164
       * type : string
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'ICC_Profile::Header.ICC-header:ProfileCMMType',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 4;

}
