<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SurroundShotVideo extends AbstractTagGroup
{

  protected string $id = 'Samsung:SurroundShotVideo';

  protected string $name = 'SurroundShotVideo';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Samsung::Trailer
       * line : 334294
       * type : ?
       * writable : false
       * count : 
       * flags : binary,permanent
       */
      'id' => 'Samsung::Trailer.Samsung:SurroundShotVideo',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 6;

}
