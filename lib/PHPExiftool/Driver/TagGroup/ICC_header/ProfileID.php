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
class ProfileID extends AbstractTagGroup
{

  protected string $id = 'ICC-header:ProfileID';

  protected string $name = 'ProfileID';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : ICC_Profile::Header
       * line : 145950
       * type : int8u
       * writable : false
       * count : 16
       * flags : 
       */
      'id' => 'ICC_Profile::Header.ICC-header:ProfileID',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 16;

}
