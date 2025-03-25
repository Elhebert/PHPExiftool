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
class ComponentsConfiguration extends AbstractTagGroup
{

  protected string $id = 'File:ComponentsConfiguration';

  protected string $name = 'ComponentsConfiguration';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : DPX::Main
       * line : 105589
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DPX::Main.File:ComponentsConfiguration',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
