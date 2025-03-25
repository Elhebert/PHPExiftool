<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Red;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FocusDistance extends AbstractTagGroup
{

  protected string $id = 'Red:FocusDistance';

  protected string $name = 'FocusDistance';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Red::Main
       * line : 331651
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Red::Main.Red:FocusDistance',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
