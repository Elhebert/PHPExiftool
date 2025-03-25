<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MPF0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TotalFrames extends AbstractTagGroup
{

  protected string $id = 'MPF0:TotalFrames';

  protected string $name = 'TotalFrames';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : MPF::Main
       * line : 166259
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MPF::Main.MPF0:TotalFrames',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
