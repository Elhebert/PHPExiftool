<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\HTML;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DocType extends AbstractTagGroup
{

  protected string $id = 'HTML:DocType';

  protected string $name = 'DocType';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : HTML::Main
       * line : 142397
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'HTML::Main.HTML:DocType',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
