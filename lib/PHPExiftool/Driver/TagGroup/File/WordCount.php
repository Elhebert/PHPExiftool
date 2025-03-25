<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WordCount extends AbstractTagGroup
{

  protected string $id = 'File:WordCount';

  protected string $name = 'WordCount';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Text::Main
       * line : 394785
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Text::Main.File:WordCount',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
