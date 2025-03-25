<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Radiance;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Comment extends AbstractTagGroup
{

  protected string $id = 'Radiance:Comment';

  protected string $name = 'Comment';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Radiance::Main
       * line : 329370
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Radiance::Main.Radiance:Comment',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
