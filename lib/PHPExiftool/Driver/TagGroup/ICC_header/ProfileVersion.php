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
class ProfileVersion extends AbstractTagGroup
{

  protected string $id = 'ICC-header:ProfileVersion';

  protected string $name = 'ProfileVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : ICC_Profile::Header
       * line : 143999
       * type : int16s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ICC_Profile::Header.ICC-header:ProfileVersion',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
