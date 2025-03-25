<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TopMag extends AbstractTagGroup
{

  protected string $id = 'MNG:TopMag';

  protected string $name = 'TopMag';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : MNG::MagnifyObject
       * line : 165158
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::MagnifyObject.MNG:TopMag',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
