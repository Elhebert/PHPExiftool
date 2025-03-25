<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Font;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class InternalLeading extends AbstractTagGroup
{

  protected string $id = 'Font:InternalLeading';

  protected string $name = 'InternalLeading';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Font::PFM
       * line : 128030
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Font::PFM.Font:InternalLeading',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
